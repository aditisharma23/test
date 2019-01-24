        @if(!empty($states))
        <option value="">{{$text}}</option>
        @foreach($states as $j)
        <option value="{{$j->id}}">{{$j->name}}</option>
        @endforeach
        @endif