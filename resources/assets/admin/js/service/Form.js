import AppForm from '../app-components/Form/AppForm';

Vue.component('service-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                name:  '' ,
                description:  '' ,
                image:  '' ,
                slug:  '' ,
                meta_description:  '' ,
                
            }
        }
    }

});