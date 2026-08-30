function ValidaCPF(cpfLimpo) {
  Object.defineProperty(this, "cpfLimpo", {
    get: function () {
      return cpfLimpo.replace(/\D+/g, "");
    },
  });
}

ValidaCPF.prototype.valida = function () {
  if (!this.cpfLimpo && this.cpfLimpo.length !== 11) {
    return;
  }
  if (this.isSequecia()) return false;

  const cpfParcial = this.cpfLimpo.slice(0, -2);
  const digito1 = this.criaDigito(cpfParcial);
  const digito2 = this.criaDigito(cpfParcial + digito1);

  const novoCpf = cpfParcial + digito1 + digito2;

  return novoCpf === this.cpfLimpo;
};

ValidaCPF.prototype.criaDigito = function (cpfParcial) {
  const cpfArray = Array.from(cpfParcial);
  let regressivo = cpfArray.length + 1;
  const total = cpfArray.reduce(function (ac, valor) {
    ac += regressivo * Number(valor);
    regressivo--;
    return ac;
  }, 0);

  const digito = 11 - (total % 11);
  return digito > 9 ? "0" : String(digito);
};

ValidaCPF.prototype.isSequecia = function () {
  const sequecia = this.cpfLimpo[0].repeat(this.cpfLimpo.length);
  return sequecia === this.cpfLimpo;
};
const cpf = new ValidaCPF("041.451.891-83");
console.log(cpf.valida());
