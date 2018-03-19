
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="http://malsup.github.io/min/jquery.form.min.js"></script>



<form action="{{ url('store') }}" method="post">
    <input type="text" id="name" name="name">
    <input type="text" id="last_name" name="email">
    <button type="submit">Save</button>
</form>

<button id="getData">GetData</button>

<script>
    $(document).ready(function () {

        $('[type="button"]').click(function () {
            $.ajax({
                type: "POST",
                url: "http://localhost/lumen_5_5/blog/public/store",
                data: {"name":"xzc","email":"im"},

                success:function (data) {
                    //alert(data);
                    console.log(data);
                }
            });
        });

        $("#getData").click(function () {
            $.ajax({
                url: '{{ url('getData') }}',
                success: function (data) {
                    console.log(data.allData[2].email);
                    //alert(data);
                }
            });
        });
    });

</script>