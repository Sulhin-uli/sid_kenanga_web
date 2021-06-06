// tailwind.config.js
module.exports = {

    purge: [
 
      './src/**/*.html',
 
      './src/**/*.js',
 
    ],
     darkMode: 'class', // or 'media' or 'class'
     theme: {
       extend: {
         colors: {
           skcolor: {
             DEFAULT: '#00155E',
             dark: '#0025AA'
           }
         }
       },
     },
     variants: {},
     plugins: [],
   }