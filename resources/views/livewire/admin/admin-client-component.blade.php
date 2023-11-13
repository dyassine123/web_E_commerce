<div>
    <style>
        nav svg {
            height: 20px;
        }

        nav .hidden {
            display: block !important;
        }
    </style>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                             <div class="col-md-6">
                                 ALL Clients
                              </div>
                            <div class="col-md-6" >
                                  <a href="{{route('admin.addusers')}}" class="btn btn-success pull-right"> Add New</a>
                            </div>
                        </div>
                       </div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ClientId</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Date de creation</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($clients as $client)
                                    <tr>
                                        <td>{{ $client->id }}</td>
                                        <td>{{ $client->name }}</td>
                                        <td>{{ $client->email }}</td>    
                                        <td>{{ $client->created_at }}</td>       
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $clients->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
</div>


