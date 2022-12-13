<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LE CONG TIEN</title>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
</head>

<body>
    <div class="container">
        <form class="form-test" method="post">
            Name : <input type="text" name="name" id="name" placeholder="Enter your name" required>
            <br>
            Avatar : <input type="file" name="avatar" id="avatar" required>
            <br>
            <button class="submit" type="submit">Submit</button>
        </form>
        <div class="info"></div>
    </div>
    <script>
    $(document).ready(function() {
        $(".submit").click(function(e) {
            e.preventDefault();
            var name = $("#name").val();
            var avatar = $("#avatar").val();
            $.ajax({
                url: "action.php",
                type: "POST",
                data: {
                    name: name,
                    avatar: avatar
                }
            }).done(function(data) {
                $(".info").html(data);
            });
        });
    });
    </script>
</body>

</html>