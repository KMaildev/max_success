<div class="col-md-8">
    <form action="{{ route('labour_management.store') }}" method="post" autocomplete="off" enctype="multipart/form-data"
        id="create-form">
        @csrf
        <input type="hidden" required value="{{ $contract->id }}" name="contract_id">
        <input type="hidden" required value="{{ $contract->demand_id }}" name="demand_id">
        <input type="hidden" required value="{{ $contract->demands_table->overseas_agencie_id }}"
            name="overseas_agencies_id">

        <div class="input-group">
            <span class="input-group-text" style="background-color: #4D84EC; color: white;">
                Import Excel File
            </span>
            <input type="file" class="form-control" name="labour_lists">
        </div>
        <br>
        <input type="submit" class="create-new btn btn-primary" value="Upload">
        <a href="{{ asset('data/labour_lists.xlsx') }}" class="btn btn-success">
            Simple File
        </a>
    </form>
</div>
