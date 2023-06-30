<div class="col-lg-8">
    <div class="feature-h">
        <form>
            <div class="row">
                <div class="col-lg-12 mb-2">
                    <h2 class="font-weight-bold text-primary heading">
                        {{ $title }}
                    </h2>
                </div>
                <div class="col-md-12 mb-2">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button style="background-color: #efefef" class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Categories
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="row">
                                        @foreach ($categories_select as $category)
                                            @php
                                                $isSelected = false;
                                            @endphp

                                            @foreach ($selected as $sel)
                                                @if ($sel['id'] == $category->id)
                                                    @php
                                                        $isSelected = true;
                                                        break;
                                                    @endphp
                                                @endif
                                            @endforeach

                                            @if (!$isSelected)
                                                <div class="col-sm-6 col-xl-4 mt-2">
                                                    <div class="mb-2">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" value="{{ $category->id }}" name="categories[]" wire:model.defer="categories">
                                                            <label class="form-check-label">{{ $category->name }}</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" wire:model.defer="name">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 d-flex">
                    <h5>Variant</h5>
                    <span class="ms-auto">
                        <a href="#" class="btn btn-primary" wire:click.prevent="addVariant">Add Variant</a>
                    </span>
                </div>
                @foreach($variants AS $k=>$v)
                    <div @if(isset($v['id'])) class="col-md-3" @else class="col-md-4" @endif>
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" name="v_name" wire:model.defer="variants.{{ $k }}.v_name">
                        </div>
                    </div>
                    <div @if(isset($v['id'])) class="col-md-3" @else class="col-md-4" @endif>
                        <div class="mb-3">
                            <label class="form-label">Sap Product Code</label>
                            <input type="text" class="form-control" name="sap_product_code" wire:model.defer="variants.{{ $k }}.sap_product_code">
                        </div>
                    </div>
                    <div @if(isset($v['id'])) class="col-md-3" @else class="col-md-4" @endif>
                        <div class="mb-3">
                            <label class="form-label">Web Product Code</label>
                            <input type="text" class="form-control" name="web_product_code" wire:model.defer="variants.{{ $k }}.web_product_code">
                        </div>
                    </div>
                    @if(isset($v['id']))
                        <div class="col-md-3">
                            <div class="mb-3">
                                <a href="#" wire:click.prevent="deleteVariant({{ $v['id'] }})"><i class="bi bi-trash-fill"></i></a>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="mb-3">
                        <button type="button" class="btn btn-primary" wire:click.prevent="saveProduct">Save</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
