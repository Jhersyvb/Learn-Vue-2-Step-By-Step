let store = {
    user: {
        name: 'Sara Luz'
    }
};

new Vue({
    el: '#one',

    data: {
        foo: 'bar',
        shared: store
    }
});

new Vue({
    el: '#two',

    data: {
        foo: 'other',
        shared: store
    }
});