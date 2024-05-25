const mix = require('laravel-mix');

mix.js('resources/js/ColorPicker.js', 'public/js')
.js('resources/js/DatePicker.js', 'public/js')
.js('resources/js/TimePicker.js', 'public/js')
.js('resources/js/QR.js', 'public/js')
.js('resources/js/LineStatistics.js', 'public/js')
.js('resources/js/BarStatistics.js', 'public/js')
.js('resources/js/FloorPlan.js', 'public/js')
.react()
.copyDirectory('resources/images','public/images')