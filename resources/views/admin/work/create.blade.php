@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.work.actions.create'))

@section('body')

    <div class="container-xl">

        <div class="card">

            <work-form
                :action="'{{ url('admin/works') }}'"
                
                inline-template>

                <form class="form-horizontal form-create" method="post" @submit.prevent="onSubmit" :action="this.action" novalidate>

                    <div class="card-header">
                        <i class="fa fa-plus"></i> {{ trans('admin.work.actions.create') }}
                    </div>

                    <div class="card-block">

                        @include('admin.work.components.form-elements')

                    </div>

                    <div class="card-footer">
	                    <button type="submit" class="btn btn-primary" :disabled="submiting">
		                    <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
		                    {{ trans('brackets/admin-ui::admin.btn.save') }}
	                    </button>
                    </div>

                </form>

            </work-form>

        </div>

    </div>

@endsection