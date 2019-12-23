  @php
    $modelCategory = (new \App\Models\ShopCategory);
    $categories = $modelCategory->getCategoriesAll();
    $categoriesTop = $modelCategory->getCategoriesTop();
  @endphp
  @if ($categoriesTop->count())
  <div class="category-blog">
              <h2>{{ trans('front.categories') }}</h2>
              @foreach ($categoriesTop as $key =>  $category)
                <ul style="padding:0">
                @if (!empty($categories[$category->id]))
                    <li>{{ $category->name }}<li>
                      <ul>
                        @foreach ($categories[$category->id] as $cateChild)
                            <li>
                                <a href="{{ $cateChild->getUrl() }}">{{ $cateChild->name }}</a>
                                <ul>
                                  @if (!empty($categories[$cateChild->id]))
                                    @foreach ($categories[$cateChild->id] as $cateChild2)
                                        <li>
                                          <a href="{{ $cateChild2->getUrl() }}">{{ $cateChild2->name }}</a>
                                        </li>
                                    @endforeach
                                  @endif
                                </ul>
                            </li>
                        @endforeach
                      </ul>
                @else
                  <li>
                      <a href="{{ $category->getUrl() }}"><a href="{{ $category->getUrl() }}">{{ $category->name }}</a>
                  </li>
               @endif
              </ul>
            @endforeach
  </div>
  @endif
