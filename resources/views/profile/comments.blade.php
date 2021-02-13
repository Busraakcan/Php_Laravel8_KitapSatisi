<x-app-layout>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Product</th>
            <th scope="col">Comment</th>
            <th scope="col">Validated</th>
        </tr>
        </thead>
        <tbody>
        @foreach(\Illuminate\Support\Facades\Auth::user()->comments as $comment)
        <tr>
            <td>{{$comment->product->title}}</td>
            <td>{{$comment->text}}</td>
            <td>
                {{$comment->validated ? 'validated': 'not validated'}}
            </td>
            <td>
                <a href="{{route('deleteComment', $comment->id)}}">delete</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</x-app-layout>
