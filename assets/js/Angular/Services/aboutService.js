angular.module("portfolio").service('aboutService', function ($http) {

    //Metodo usado para listar as Sections usando Ajax e
    //retornando os dados num array Object
    this.listaSections = function () {
        var lista = [];
        $http({
            method: 'GET',
            url: 'http://localhost.webapi.com/sections'
        }).then(function (result) {
            result.data.forEach(function (val, i) {
                lista.push(val);
            });
        });
        return lista;
    };
    //Metodo usado para listar os itens da Section usando Ajax e
    //retornando os dados num array Object
    this.listaItensSection = function () {
        var lista = [];
        $http({
            method: 'GET',
            url: 'http://localhost.webapi.com/itensSections'
        }).then(function (result) {
            result.data.forEach(function (val, i) {
                lista.push(val);
            });
        });
        return lista;
    };
});