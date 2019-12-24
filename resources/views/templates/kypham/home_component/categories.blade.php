  @php
    $modelCategory = (new \App\Models\ShopCategory);
    $categories = $modelCategory->getCategoriesAll();
    $categoriesTop = $modelCategory->getCategoriesTop();
  @endphp
  @if ($categoriesTop->count())
  			<ul>
              @foreach ($categoriesTop as $key =>  $category)
                <li>
                @if (!empty($categories[$category->id]))
                	{{ $category->name }}
                      <ul>
                        @foreach ($categories[$category->id] as $cateChild)
                            <li>
                                <a href="{{ $cateChild->getUrl() }}">{{ $cateChild->name }}</a>
                                  @if (!empty($categories[$cateChild->id]))
                                  	<ul>
                                    @foreach ($categories[$cateChild->id] as $cateChild2)
                                        <li>
                                          <a href="{{ $cateChild2->getUrl() }}">{{ $cateChild2->name }}</a>
                                        </li>
                                    @endforeach
                                	</ul>
                                  @endif
                            </li>
                        @endforeach
                      </ul>
                @else
                      <a style="padding: 0;
    							color: #000 !important;" href="{{ $category->getUrl() }}">{{ $category->name }}</a>
               @endif
              </li>
            @endforeach
        </ul>
  @endif
