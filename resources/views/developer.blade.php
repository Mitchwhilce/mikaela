<style>
        .profile {
            max-width: 400px;
            margin: 0 auto;
            padding: 60px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: aqua;
        }
        .profile img {
            max-width: 100%;
            border-radius: 50%;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="profile text-center">

                    <ul class="list-group">
                        <li class="list-group-item">
                            <p><a class="link-opacity-10-hover" href="https://github.com/Mitchwhilce">
                                GITHUB</a></p>
                            <p><a class="link-opacity-10-hover" href="https://web.facebook.com/michelle.generale.3/">
                                FACEBOOK</a></p>
                        </li>
                    </ul>
                    
                    <div class="container">
                        <form action="{{route('logout')}}" method="GET" class="text-center">
                            <div class="mb-3 form-check">
                                <button type="submit" class="btn btn-danger bg-danger">LOGOUT</button>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>