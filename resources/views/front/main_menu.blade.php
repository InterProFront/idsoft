@if($i == 1)
    @foreach($m_popup[$i-1] as $item_p)
        <li class="item-popup">
            <a href="/category">{{$item_p->category_name_field}}</a>
        </li>
    @endforeach
@elseif($i == 4)
    @foreach($m_popup[$i-1] as $item_p)
        <li class="item-popup">
            <a href="/category">{{$item_p->category_name_field}}</a>
        </li>
    @endforeach
@elseif($i == 6)
    @foreach($m_popup[$i-1] as $item_p)
        <li class="item-popup">
            <a href="/category">{{$item_p->category_name_field}}</a>
        </li>
    @endforeach
@endif
    