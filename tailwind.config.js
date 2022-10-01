module.exports = {
  purge: {
    content: [
      './vendor/power-components/livewire-powergrid/src/Themes/Theme.php',
      './storage/framework/views/*.php',
      './resources/views/**/*.blade.php',
      './app/Http/**/*.php',
       "./node_modules/flowbite/**/*.js"
    ],
    options: {
      safelist: [
        'sm:max-w-2xl'
      ]
    }
  },
  theme: {
    extend: {
      backgroundImage: {
        loginBackground : "url('/asset/images/background')"
      },
      colors: {
        'gray': {
          'default' : '#111827',
          'page-color' : '#F3F2EF'
        },
        'primary' : '#FD3D0C',
        'light' : '#F6F6F6',
        'dark' : '#141B22',
        'link' : '#0a66c2'
      }
    },
  },
  variants: {
    extend: {
      opacity: ['disabled'],
      cursor: ['disabled']
    }
  },
  plugins: [
     require('flowbite/plugin')
  ],
}
