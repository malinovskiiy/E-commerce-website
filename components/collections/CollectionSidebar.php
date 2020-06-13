<div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1 products-sidebar-filter">
    <div class="filter-widget">
        <h4 class="fw-title">For <?php echo $gender ?? 'null'; ?></h4> 
    </div>
    <div class="filter-widget">
        <h4 class="fw-title">Brand</h4>
        <div class="fw-brand-check button-group" data-filter-group="brand">
            <button class="bc-item btn btn-sm btn-warning text-white" data-filter="*">All brands</button>
            <button class="bc-item btn btn-sm btn-warning text-white" data-filter=".CalvinKlein">Calvin Klein</button>
            <button class=" bc-item btn btn-sm btn-warning text-white" data-filter=".Diesel">Diesel</button>
            <button class=" bc-item btn btn-sm btn-warning text-white" data-filter=".Polo">Polo</button>
            <button class="bc-item btn btn-sm btn-warning text-white" data-filter=".TommyHilfiger">Tommy Hilfiger</button>

        </div>
    </div>
    <!-- TODO -->
    <div class="filter-widget">
        <h4 class="fw-title">Price</h4>
        <div class="filter-range-wrap">
            <div class="range-slider">
                <div class="price-input">
                    <input type="text" id="minamount">
                    <input type="text" id="maxamount">
                </div>
            </div>
            <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content" data-min="33" data-max="98">
                <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
            </div>
        </div>
        <button class="filter-btn btn btn-warning text-white">Filter</button>
    </div>

    <div class="filter-widget">
        <h4 class="fw-title">Color</h4>
        <div class="fw-color-choose button-group" data-filter-group="color">
                
                <button class="cs-item btn btn-light bg-transparent border-0"  data-filter="*">All colors</button>
                <button class="cs-item btn btn-light bg-transparent border-0" id="cs-black"  data-filter=".black">
                <label class="cs-black" for="cs-black">Black</label>
       
            
                <button class="cs-item btn btn-light bg-transparent border-0" id="cs-violet"  data-filter=".violet">
                <label class="cs-violet" for="cs-violet">Violet</label>
         
           
                <button class="cs-item btn btn-light bg-transparent border-0" id="cs-blue"  data-filter=".blue">
                <label class="cs-blue" for="cs-blue">Blue</label>
          
           
                <button class="cs-item btn btn-light bg-transparent border-0" id="cs-yellow"  data-filter=".yellow">
                <label class="cs-yellow" for="cs-yellow">Yellow</label>
           
           
                <button class="cs-item btn btn-light bg-transparent border-0" id="cs-red"  data-filter=".red">
                <label class="cs-red" for="cs-red">Red</label>
            
                <button class="cs-item btn btn-light bg-transparent border-0" id="cs-green"  data-filter=".green">
                <label class="cs-green" for="cs-green">Green</label>
        </div>
    </div>
</div>