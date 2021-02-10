// This file can be replaced during build by using the `fileReplacements` array.
// `ng build --prod` replaces `environment.ts` with `environment.prod.ts`.
// The list of file replacements can be found in `angular.json`.

export const environment = {
  production: false,
  firebase: {
  apiKey: "AIzaSyAgfYOA6fmUjVJT8vBqpNCZASpGEC2AU4M",
  authDomain: "foodiesapp-3ff7f.firebaseapp.com",
  projectId: "foodiesapp-3ff7f",
  storageBucket: "foodiesapp-3ff7f.appspot.com",
  messagingSenderId: "1008988281384",
  appId: "1:1008988281384:web:622a6077d3b6a9434df31d",
  measurementId: "G-6J1687GHCC"
  },
  onesignal: {
    appId: '122e6b8b-b2d1-47e5-8cbd-434e510a0714',
    googleProjectNumber: '',
    restKey: 'NGNiZDVhODAtN2VkZi00NDNiLThhMmMtNTFhMGJmOTFlMDdj'
  },
  stripe: {
    sk: ''
  },
  paypal: {
    sandbox: '',
    production: 'YOUR_PRODUCTION_CLIENT_ID'
  },
  general: {
    symbol: '$',
    code: 'USD'
  }
};

/*
 * For easier debugging in development mode, you can import the following file
 * to ignore zone related error stack frames such as `zone.run`, `zoneDelegate.invokeTask`.
 *
 * This import should be commented out in production mode because it will have a negative impact
 * on performance if an error is thrown.
 */
// import 'zone.js/dist/zone-error';  // Included with Angular CLI.
