@if($i == 1)
    @foreach($m_popup[$i-1] as $item_p)
        <li class="item-popup">
            <a href="{{$item_p->slug_field}}">{{$item_p->category_name_field}}</a>
        </li>
    @endforeach
@elseif($i == 2)
    @foreach($m_popup[$i-1] as $item_p)
        <li class="item-popup">
            <a href="{{$item_p->slug_field}}">{{$item_p->page_name_field}}</a>
        </li>
    @endforeach
@elseif($i == 3)
    @foreach($m_popup[$i-1] as $item_p)
        <li class="item-popup">
            <a href="{{$item_p->slug_field}}">{{$item_p->product_name_field}}</a>
        </li>
    @endforeach
@elseif($i == 4)
    @foreach($m_popup[$i-1] as $item_p)
        <li class="item-popup">
            <a href="{{$item_p->slug_field}}">{{$item_p->category_name_field}}</a>
        </li>
    @endforeach
@elseif($i == 5)
    @foreach($m_popup[$i-1] as $item_p)
        <li class="item-popup">
            <a href="{{$item_p->slug_field}}">{{$item_p->tarif_name_field}}</a>
        </li>
    @endforeach
@elseif($i == 6)
    @foreach($m_popup[$i-1] as $item_p)
        <li class="item-popup">
            <a href="{{$item_p->slug_field}}">{{$item_p->category_name_field}}</a>
        </li>
    @endforeach
@endif
    