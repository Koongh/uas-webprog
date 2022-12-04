<form action="/home/{{$item->id}}}" method="post" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <input type="file" name="photo"  />
    <button type="submit" class="">Submit</button>
</form>