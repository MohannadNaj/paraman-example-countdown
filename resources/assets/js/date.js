
window.moment = require('moment')

if(typeof Vue != "undefined") {
    require('./libs/datetimepicker')

    Vue.component('editor-date',require('./components/date.vue'))    
}

