<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use App\Http\Requests\Admin\Work\IndexWork;
use App\Http\Requests\Admin\Work\StoreWork;
use App\Http\Requests\Admin\Work\UpdateWork;
use App\Http\Requests\Admin\Work\DestroyWork;
use Brackets\AdminListing\Facades\AdminListing;
use App\Models\Work;

class WorksController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param  IndexWork $request
     * @return Response|array
     */
    public function index(IndexWork $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Work::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'service_id', 'name', 'image', 'featured'],

            // set columns to searchIn
            ['id', 'name', 'description', 'slug', 'meta_description', 'image']
        );

        if ($request->ajax()) {
            return ['data' => $data];
        }

        return view('admin.work.index', ['data' => $data]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $this->authorize('admin.work.create');

        return view('admin.work.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreWork $request
     * @return Response|array
     */
    public function store(StoreWork $request)
    {
        // Sanitize input
        $sanitized = $request->validated();

        // Store the Work
        $work = Work::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/works'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/works');
    }

    /**
     * Display the specified resource.
     *
     * @param  Work $work
     * @return Response
     */
    public function show(Work $work)
    {
        $this->authorize('admin.work.show', $work);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Work $work
     * @return Response
     */
    public function edit(Work $work)
    {
        $this->authorize('admin.work.edit', $work);

        return view('admin.work.edit', [
            'work' => $work,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateWork $request
     * @param  Work $work
     * @return Response|array
     */
    public function update(UpdateWork $request, Work $work)
    {
        // Sanitize input
        $sanitized = $request->validated();

        // Update changed values Work
        $work->update($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/works'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/works');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  DestroyWork $request
     * @param  Work $work
     * @return Response|bool
     */
    public function destroy(DestroyWork $request, Work $work)
    {
        $work->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }
}
