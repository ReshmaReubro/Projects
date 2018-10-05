import AppForm from '../app-components/Form/AppForm';

Vue.component('work-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                service_id:  '' ,
                name:  '' ,
                description:  '' ,
                slug:  '' ,
                meta_description:  '' ,
                image:  '' ,
                featured:  false ,
                
            }
        }
    }

});