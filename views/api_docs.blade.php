<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{ asset('vendor/api_docs/styles.css') }}">
</head>
<body>
<div class="font-weight-bold text-center ">Base Url [ <a href="{{ config('api_docs.baseUrl') ?? url('/') }}">{{ config('api_docs.baseUrl') ?? request()->getScheme() . '://' . request()->getHost() }}</a> ]</div>
<table id="routes-table" class="table table-bordered table-responsive">
    <thead >
    <tr >
        <th class="font-weight-bold">Sr.#</th>
        <th class="font-weight-bold">uri</th>
        <th class="font-weight-bold">Prefix</th>
        <th class="font-weight-bold">Method</th>
        <th class="font-weight-bold">Params</th>
        <th class="font-weight-bold">Headers</th>
        <th class="font-weight-bold">Responses</th>
    </tr>
    </thead>
    <tbody>
    @php $i = 0; @endphp
    @foreach ( \Illuminate\Support\Facades\Route::getRoutes() as  $route )
        @if($route->getPrefix() == 'api' || $route->getPrefix() == 'api/')
            @php $prefix = trim($route->getPrefix(), "/"); @endphp
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{$route->uri }}</td>
                <td>{{ $prefix }}</td>
                <td>{{ $route->methods()[0] }}</td>
                <td>
                    @php $params = config('api_docs.' . str_replace( $prefix . '/', '', $route->uri) . '.params');@endphp

                    @if($params)
                        <div class="alert alert-info">
                            <ul>
                                @foreach($params as $param => $validation)
                                    <li><b>{{ $param }} </b> : {{ $validation }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </td>
                <td>
                    @php $headers = config('api_docs.' . str_replace($prefix . '/', '', $route->uri) . '.headers');  @endphp

                    @if($headers)
                        <div class="alert alert-primary">
                            <ul>
                                @foreach($headers as $header => $validation)
                                    <li><b>{{ $header }} </b> : {{ $validation }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </td>
                <td>
                    @php $responses = config('api_docs.' . str_replace($prefix . '/', '', $route->uri) . '.responses');  @endphp

                    @if($responses)
                        @php
                            $errors = $responses['errors'] ?? null;
                            $success = $responses['success'] ?? null;
                        @endphp
                        @if($success)
                            <div class="alert alert-success">
                                <b><u>Successes</u></b>
                                <ul>
                                    @foreach($success as $value => $description)
                                        <li><b>{{ $value }} </b> : {{ is_array($description) || is_object($description) ? json_encode($description) : $description }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if($errors)
                            <div class="alert alert-danger">
                                <b><u>Errors</u></b>
                                <ul>
                                    @foreach($errors as $value => $description)
                                        <li><b>{{ $value }} </b> : {{ is_array($description) || is_object($description) ? json_encode($description) : $description  }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    @endif
                </td>
            </tr>
        @endif
    @endforeach
    </tbody>
</table>

</body>
</html>
