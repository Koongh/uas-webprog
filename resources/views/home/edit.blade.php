
<form action="/home/{{$item->id}}}" method="post" onsubmit="return editProduct(this)" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <input type="checkbox" name="arr1" value="kaki" />
    <input type="checkbox" name="arr2" value="kaki1" />
    <input type="checkbox" name="arr3" value="kaki2" />
    <input type="checkbox" name="arr4" value="kaki3" />
    <input type="checkbox" name="arr5" value="kaki4" />
    <button onclick="editProduct()" type="submit" class="">Submit</button>

    <script>
        function editProduct() {
            Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!' 
            },
            )
            .then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
                )
            }
            });
            return false;
        }
    </script>
</form>