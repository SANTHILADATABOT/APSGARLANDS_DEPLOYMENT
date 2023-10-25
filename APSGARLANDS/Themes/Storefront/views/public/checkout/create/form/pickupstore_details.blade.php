<div v-if="form.shipping_method !== 'flat_rate'">
  <h4 class="section-title">{{ trans('storefront::checkout.pickup_store_details') }}</h4>
  <div id="getLocalpickupAddress">
    <div class="select-address">
    <div class="form-group">
      <div v-if="pickupstore.length === 0">
        <p>Pickup store is currently not available</p>
      </div>
      <div v-else>
    <div class="form-radio" v-for="address in pickupstore" :key="address.id">
      <input type="radio" :id="'localpickup_address_' + address.id" :value="address.id" v-model="selectedLocalpickupAddressId">
      <label :for="'localpickup_address_' + address.id">
        <span v-text="address.name"></span>
        <span v-text="address.tagline"></span>
        <span v-if="address.email" v-text="address.address_1"></span>
        <span>@{{ address.city }}, @{{ address.store_state }} @{{ address.zip }}</span>
        <span v-text="address.store_country"></span>
        {{-- <span>{{ address.name }}</span>
        <span>{{ address.tagline }}</span>
        <span>{{ address.email }}</span>
        <span>{{ address.phone }}</span>
        <span>{{ address.address_1 }}, {{ address.address_2 ? address.address_2 + ', ' : '' }}{{ address.city }}, {{ address.store_state }} {{ address.zip }}</span>
        <span>{{ address.store_country }}</span> --}}
      </label>
    </div>
    </div>
    </div></div>
  </div>
</div>