<body>

    <style>
        button {
            background: green;
            border: 0px solid white;
            padding: 5px;
            color: white;
            padding: 10px;
            padding-left: 80px;
            padding-right: 80px;

        }

        button:hover {
            background: red;

        }

        body {
            background: #27ae60;
            text-align: center;
        }

        .ventana {

            border: 1px solid grey;
            box-shadow: 5px 5px 5px #34495e;
            text-align: center;
            background: #95a5a6;
            width: 300px;
            margin-left: auto;
            margin-right: auto;
            margin-top: 200px;
            padding: 10px;
            padding-top: 30px;
            padding-bottom: 30px;
        }

        .tamaño {
            padding-left: 20px;
            padding-right: 20px;
            padding-top: 10px;
            padding-bottom: 10px;
            text-align: center;
        }
    </style>
    <body>
        <h1>Error al Logearte</h1>

        <form action="respuesta.php" method="post">
            <div class=ventana>
                <br>
                <input name="nombre_usuario" required placeholder="Username" class="tamaño">
                <br><br>
                <input name="password" type="password" required placeholder="Password " class="tamaño">
                <br><br>
                <button>LOGIN</button> <br> <br>
                <br>
            </div>
        </form>
    </body>