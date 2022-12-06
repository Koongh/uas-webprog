<form action="/home/{{$item->id}}}" method="post" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <input type="checkbox" name="arr1" value="kaki" />
    <input type="checkbox" name="arr2" value="kaki1" />
    <input type="checkbox" name="arr3" value="kaki2" />
    <input type="checkbox" name="arr4" value="kaki3" />
    <input type="checkbox" name="arr5" value="kaki4" />
    <button type="submit" class="">Submit</button>

</form>