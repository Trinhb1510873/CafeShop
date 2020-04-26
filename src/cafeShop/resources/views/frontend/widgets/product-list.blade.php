<div class="bg0 m-t-23 p-b-140">
    <div class="container">
        <div class="row isotope-grid">
            @foreach($data as $index=>$ma)
            <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                <!-- Block2 -->
                <div class="block2" >
                    <div class="block2-pic hov-img0">
                        <img style="width: 270px;height: 180px" src="{{ asset('storage/photos/' . $ma->ma_hinh) }}" alt="IMG-PRODUCT">
                    </div>

                    <div class="block2-txt flex-w flex-t p-t-14">
                        <div class="block2-txt-child1 flex-col-l ">
                            <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                {{ $ma->ma_ten }}
                            </a>

                            <span class="stext-105 cl3">
                                <?php echo number_format($ma->ma_giaBan)?>đ
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Load more -->
        <div class="flex-c-m flex-w w-full p-t-45">
            <a href="#" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
                Load More
            </a>
        </div>
    </div>
</div>