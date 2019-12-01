@section('her')
<div id="btn" style=" background-color: rgb(55, 0, 255); margin: 300px auto; font-size: 100px;">ЖМИ</div>
<script>
    $('#btn').click(() => {
        $.ajax({
            type: 'GET',
            url: '/get_items',
            data: '255&666&228&322&1488&420&69',
            success:function (data) {
              console.log(data);
            }
        })
    });
</script>
@show
