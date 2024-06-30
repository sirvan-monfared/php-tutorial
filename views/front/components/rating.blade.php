<ul class="rating">
    @for($i = 1; $i <= (int) $stars; $i++)
        <li>
            <i data-feather="star" class="fill"></i>
        </li>
    @endfor

    @for($i = $stars + 1; $i <=5; $i++)
        <li>
            <i data-feather="star"></i>
        </li>
    @endfor
</ul>