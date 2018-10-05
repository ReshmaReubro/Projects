<div class="form-group row align-items-center" :class="{'has-danger': errors.has('service_id'), 'has-success': this.fields.service_id && this.fields.service_id.valid }">
    <label for="service_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.work.columns.service_id') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.service_id" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('service_id'), 'form-control-success': this.fields.service_id && this.fields.service_id.valid}" id="service_id" name="service_id" placeholder="{{ trans('admin.work.columns.service_id') }}">
        <div v-if="errors.has('service_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('service_id') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('name'), 'has-success': this.fields.name && this.fields.name.valid }">
    <label for="name" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.work.columns.name') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.name" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('name'), 'form-control-success': this.fields.name && this.fields.name.valid}" id="name" name="name" placeholder="{{ trans('admin.work.columns.name') }}">
        <div v-if="errors.has('name')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('name') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('description'), 'has-success': this.fields.description && this.fields.description.valid }">
    <label for="description" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.work.columns.description') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div>
            <textarea v-model="form.description" v-validate="'required'" @input="validate($event)" class="hidden-xs-up" id="description" name="description"></textarea>
            <quill-editor v-model="form.description" :options="wysiwygConfig" />
        </div>
        <div v-if="errors.has('description')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('description') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('slug'), 'has-success': this.fields.slug && this.fields.slug.valid }">
    <label for="slug" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.work.columns.slug') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.slug" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('slug'), 'form-control-success': this.fields.slug && this.fields.slug.valid}" id="slug" name="slug" placeholder="{{ trans('admin.work.columns.slug') }}">
        <div v-if="errors.has('slug')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('slug') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('meta_description'), 'has-success': this.fields.meta_description && this.fields.meta_description.valid }">
    <label for="meta_description" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.work.columns.meta_description') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div>
            <textarea v-model="form.meta_description" v-validate="'required'" @input="validate($event)" class="hidden-xs-up" id="meta_description" name="meta_description"></textarea>
            <quill-editor v-model="form.meta_description" :options="wysiwygConfig" />
        </div>
        <div v-if="errors.has('meta_description')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('meta_description') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('image'), 'has-success': this.fields.image && this.fields.image.valid }">
    <label for="image" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.work.columns.image') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.image" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('image'), 'form-control-success': this.fields.image && this.fields.image.valid}" id="image" name="image" placeholder="{{ trans('admin.work.columns.image') }}">
        <div v-if="errors.has('image')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('image') }}</div>
    </div>
</div>

<div class="form-check row" :class="{'has-danger': errors.has('featured'), 'has-success': this.fields.featured && this.fields.featured.valid }">
    <div class="ml-md-auto" :class="isFormLocalized ? 'col-md-8' : 'col-md-10'">
        <input class="form-check-input" id="featured" type="checkbox" v-model="form.featured" v-validate="''" data-vv-name="featured"  name="featured_fake_element">
        <label class="form-check-label" for="featured">
            {{ trans('admin.work.columns.featured') }}
        </label>
        <input type="hidden" name="featured" :value="form.featured">
        <div v-if="errors.has('featured')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('featured') }}</div>
    </div>
</div>


