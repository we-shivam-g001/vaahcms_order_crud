let routes= [];

import dashboard from "./vue-routes-dashboard";
import order from "./vue-routes-orders";

routes = routes.concat(order);
routes = routes.concat(dashboard);

export default routes;
