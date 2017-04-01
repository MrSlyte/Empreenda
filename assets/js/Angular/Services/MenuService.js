angular.module("portfolio").service("MenuService", function () {
    this.menu = [
        {id: 4, nome: "contato", displayName: "Contato", src: "#contato"},
        {id: 3, nome: "portfolio", displayName: "Portfólio", src: "#portfolio"},
        {id: 2, nome: "quemSou", displayName: "Quem Sou", src: "#sobre"},
        {id: 1, nome: "homePage", displayName: "Página inicial", src: "#/"}
    ];

    this.listaMenu = function () {
        return this.menu;
    }
});