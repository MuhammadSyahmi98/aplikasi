<html>
    <head>
        <title>Welcome to Aplikasi</title>

        <style>
            body {
                background-color: #eee;
            }
            table {
                background-color: #fff;
                width: 100%;
                max-width: 800px;
                margin: auto;
                padding: 30px;
            }

            h1 {
                margin-top: 0px;
            }

            .btn {
                background-color: lightblue;
                text-decoration: none;
                padding: 10px 20px;
                font-size: 1em;
                color: white;
                border-radius: 10px;
                margin-top: 10px;
                display: inline-block;
            }
        </style>
    </head>
    <body>
        <table>
            <tr cellspacing="0" cellpadding="0" border="0">
                <td>
                <!-- email content here -->
                <h1>Selamat Datang {{$name}}</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius, quasi voluptatibus deserunt quod, animi libero dolor inventore placeat veniam cupiditate perferendis quae! Maxime explicabo consectetur aliquid quis vero repellendus fugiat!</p>

                <a href="{{$code}}" class="btn">TEKAN SINI</a>

                </td>
            </tr>
        </table>
    </body>
</html>