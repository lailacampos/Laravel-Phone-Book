<div class="col-lg-4 inp">
    <form action="." method="GET">
        <div class="form-group">
            <input type="text" name="searchName" id="searchName" class="form-control mt-2 mb-3" value="{{request('searchName')}}" placeholder="search">
            <input class="btn btn-info w-100 btn1" type="submit" value="search">
            <a href="{{route('contacts.index')}}" class="btn btn-secondary w-100 btn1 mt-2">Clear</a>
        </div>
    </form>
</div>