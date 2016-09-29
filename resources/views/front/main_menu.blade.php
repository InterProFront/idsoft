@if($i == 1)
    @foreach($m_popup[$i-1] as $item_p)
        <li class="item-popup">
            <a href="/catalog/{{$item_p->slug_field}}">{{$item_p->category_name_field}}</a>
        </li>
    @endforeach
@elseif($i == 4)
    @foreach($m_popup[$i-1] as $item_p)
        <li class="item-popup">
            <a href="/showcase/{{$item_p->slug_field}}">{{$item_p->category_name_field}}</a>
        </li>
    @endforeach
@elseif($i == 6)
    @foreach($m_popup[$i-1] as $item_p)
        <li class="item-popup">
            <a href="/video/{{$item_p->slug_field}}">{{$item_p->category_name_field}}</a>
        </li>
    @endforeach
@endif
    