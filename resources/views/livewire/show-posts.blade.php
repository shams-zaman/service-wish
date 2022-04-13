<div>

    <div>
        <div class="table-settings ">
            <div class="row align-items-center justify-content-between">
                <div class="col col-md-6 col-lg-3 offset-lg-3 col-xl-4">
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon2"><span class="fas fa-search"></span></span>
                        <input wire:model.debounce.300ms="search" type="text" class="form-control"
                            id="exampleInputIconLeft" placeholder="Search Users" aria-label="Search"
                            aria-describedby="basic-addon2">
                    </div>
                </div>

            </div>
        </div>
        <div class="card card-body border-light shadow-sm table-wrapper table-responsive pt-0">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>title</th>
                        <th>desc</th>
                        <th>Submit-Date</th>
                        {{-- <th></th>
                        <th>Total</th>
                        <th>Status</th> --}}
                        <th>Status</th>

                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Item -->
                    @foreach ($items as $item)
                    <tr>
                        <td>
                            <a href="../invoice.html" class="font-weight-bold">
                                {{ $item->id }}
                            </a>
                        </td>
                        <td>
                            <span class="font-weight-normal">
                                {!! Illuminate\Support\Str::limit($item->desc, 20) !!}</span>
                        </td>
                        <td><span class="font-weight-normal">
                                {!! Illuminate\Support\Str::limit($item->desc, 90) !!}</span></td>
                        <td><span class="font-weight-normal"> {{ $item->created_at }}</span></td>
                        {{-- <td><span class="font-weight-bold"> {{ $user->updated_at }}</span></td> --}}
                        {{-- <td><span class="font-weight-bold text-warning"></span> {{ $user->id }}</td> --}}
                        <td>
                            <livewire:toggle-button :model="$item" field="status" key="{{ $item->id }}" />
                            {{-- <div class="form-check form-switch">
                                <input wire:model="hasStock" class="form-check-input" type="checkbox" name="toggle"
                                    id="status">
                                <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                            </div> --}}
                        </td>
                        <td>
                            <div class="btn-group">
                                <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="icon icon-sm">
                                        <span class="fas fa-ellipsis-h icon-dark"></span>
                                    </span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="../invoice.html"><span
                                            class="fas fa-eye mr-2"></span>View Details</a>
                                    <a class="dropdown-item" href="{{ route('admin.blog-edit', $item->id) }}"><span
                                            class="fas fa-edit mr-2"></span>Edit</a>
                                    <a class="dropdown-item text-danger" href="#"><span
                                            class="fas fa-trash-alt mr-2"></span>Remove</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    <!-- Item -->

                    <!-- Item -->

                </tbody>
            </table>

            <div>
                {{-- <p>
                    Showing {{ $items->firstItem() }} to {{ $items->lastItem() }} out of {{ $items->total() }} items.
                </p> --}}
                <p class="col-lg-6 col-md-6">
                <div class="font-weight-bold small offset-lg-10">Showing <b>{{ $items->firstItem() }}</b> to
                    <b>{{ $items->lastItem() }} </b> out of <b>{{ $items->total() }} </b> entries
                </div>
                {{ $items->links('pagination_links') }}

                </p>

            </div>

        </div>
    </div>

</div>