
import FilterSelector from './components/FilterSelector'

Nova.booting(Vue => {
    Vue.component('multiselect-filter', Vue.component('select-filter').extend(FilterSelector));
});
