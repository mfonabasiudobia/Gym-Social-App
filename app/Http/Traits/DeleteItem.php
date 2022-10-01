<?php

namespace App\Http\Traits;


trait DeleteItem{


    // public function trashDelete($eventData){
    //     $model = $eventData[0]; //By default Model is first Item in event Data
    //     $id = $eventData[1]; //By default Item ID is second item in event Data

    //     $model::destroy($id);
    //     $this->dispatchBrowserEvent('toaster',["status" => "success", "message" => "Item has been Unpublished"]);
        
    // }


    public function deleteItem($details){
        

        $model = $details[0]; //By default Model is first Item in event Data
        $id = $details[1]; //By default Item ID is second item in event Data

            if(session('current_tab') == 'inventory'){

                $this->deleteFromInventory($model, $id);

            }else{

                $this->generalDelete($model, $id);

            }
    }


    private function generalDelete($model, $id){

        $model::destroy($id);
        $this->dispatchBrowserEvent('toaster',["status" => "success", "message" => "Item has been Deleted"]);

        $this->emit("rerenderComponent");

    }


    public function deleteFromInventory($model, $id){

        $inventory = $model::find($id);

        $isMore = $model::where('barcode', $inventory->barcode)
                        ->where('description', $inventory->description);


        if($isMore->count() === 1){

            $this->dispatchBrowserEvent('toaster',["status" => "error", "message" => "Item cannot be deleted"]);

        }else if($isMore->count() > 1){
                $total = $isMore->count();
                $inventoryWithZeroPc = $isMore->where('quantity_pcs',0);

                if($total === $inventoryWithZeroPc->count()){ 
                //if  all rows have 0 pc then destory except row with latest expiry date

                    $latestRow = $isMore->orderBy('expiry_date', 'DESC')->first();
                    $model::destroy($inventoryWithZeroPc->where('id','!=', $latestRow->id)->pluck("id"));

                }else if($total !== $inventoryWithZeroPc->count()) //if not all rows have 0 pc then delete those with 0
                                $model::destroy($inventoryWithZeroPc->pluck("id"));

                $this->dispatchBrowserEvent('toaster',["status" => "success", "message" => "Item(s) have been deleted"]);
                $this->emit("rerenderComponent");

        }else if($inventory->quantity_pcs === 0){

            $this->dispatchBrowserEvent('toaster',["status" => "error", "message" => "Item cannot be deleted"]);

        }

    }


    // public function forceDelete($eventData){
    //     $model = $eventData[0];
    //     $model::withTrashed()->find($eventData[1])->forceDelete();
    //     $this->dispatchBrowserEvent('toaster',["status" => "success", "message" => "Item has been deleted"]);
        
    // }


    // public function restoreTrash($eventData){
    //     $model = $eventData[0]; 

    //     $model::onlyTrashed()->find($eventData[1])->restore();
    //     $this->dispatchBrowserEvent('toaster',["status" => "success", "message" => "Item has been Published"]);
        
    // }






}