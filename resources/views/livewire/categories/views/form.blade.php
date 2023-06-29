<div class="col-lg-6">
    <div class="feature-h">
        <form>
            <div class="row">
            <div class="col-lg-12 mb-2">
                <h2 class="font-weight-bold text-primary heading">
                    {{ $title }}
                </h2>
            </div>
                <div class="col-md-12">
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" wire:model.defer="name">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="mb-3">
                        <label class="form-label">Meta Title</label>
                        <input type="text" class="form-control" name="meta_title" wire:model.defer="meta_title">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="mb-3">
                        <label class="form-label">Meta Description</label>
                        <textarea type="text" class="form-control" name="meta_description" wire:model.defer="meta_description"></textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="mb-3">
                        <label class="form-label">Meta Keywords</label>
                        <textarea type="text" class="form-control" name="meta_keywords" wire:model.defer="meta_keywords"></textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="mb-3">
                        <button type="button" class="btn btn-primary" wire:click.prevent="saveCategory">Save</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>