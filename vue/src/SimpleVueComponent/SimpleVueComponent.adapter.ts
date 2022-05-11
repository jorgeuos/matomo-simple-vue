/*!
 * Jorgeuos - MIT License
 *
 * @link https://jorgeuos.github.io/
 * @license https://github.com/jorgeuos/matomo-simple-vue/blob/main/LICENSE
 */

import { defineAsyncComponent } from 'vue';
import { createAngularJsAdapter } from 'CoreHome';

const AsyncSimpleVueComponent = defineAsyncComponent(() => import('./SimpleVueComponent.vue'));

export default createAngularJsAdapter({
  component: AsyncSimpleVueComponent,
  directiveName: 'simpleVueComponent',
});
