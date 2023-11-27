<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
        }

        span {
            font-weight: 600;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card mt-3">
                    <div class="card-header bg-primary text-white">
                        <span>Data Inbox</span>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover table-striped" style="width: 100%">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Message</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($inboxes as $inbox)
                                    <tr>
                                        <td scope="row">{{ $inbox->id }}</td>
                                        <td>{{ $inbox->name }}</td>
                                        <td>{{ $inbox->phone }}</td>
                                        <td>{{ $inbox->message }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td scope="row" colspan="6">Data Masih kosong</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        {{-- Pagination --}}
                        <div class="d-flex justify-content-center">
                            {{ $inboxes->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
