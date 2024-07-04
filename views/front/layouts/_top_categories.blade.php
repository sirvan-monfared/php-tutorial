<ul class="category-list">
    @foreach($categories as $category)
        <li class="onhover-category-list">
            <a href="{{ $category->viewLink() }}" class="category-name">
                <img src="{{ $category->featuredImageOrDefault() }}" alt="">
                <h6>{{ $category->name }}</h6>
            </a>
        </li>
    @endforeach
</ul>