<html lang="">

<head>
    <title>Document</title>
</head>
<body>
    <h1>Products</h1>

    <form id="productForm">
        @csrf
        <input type="text" name="name" />
    </form>

    <input type="button" value="save" onclick="submitform()" />
</body>
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3Bz" />

<script>
    function submitform(){
        var form = $("#productForm")[0];
        var data = new FormData(form);

        $.ajax({
            type: 'Post',
            url: '{{ URL('submitform') }}',
            data: data,
            encrypt: 'multipart/form-data',
            processData: false,
            contentType: false,
            success: function (data){
                console.log(data);
            },
            error: function (e){
                console.log(e);
            }

        })
    }
</script>

</html>
