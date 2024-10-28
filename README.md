## Pagamentos 

- Temos um namespace 'PagamentoSistema' e a interface 'Pagamento' com um método de processamento recebendo um valor;
- Duas classes concretas ('CartaoCredito', 'Boleto') que implementam a interface Pagamento e o metodo de processamento
  para exibir uma mensagem dizendo que o pagamento foi processado com sucesso.

  ## Produtos
  - Uma classe abstrata chamada 'Produto' com atributos como nome, preço e quantidade, nela fazemos uso de uma propriedade estatíca
    chamada 'totalProdutos' para sabermos quantos produtos foram criados/cadastradps e um método abstrato para retornar a categoria de cada produto;
    - Temos duas classes concretas que implementam a classe produto e retornam o nome da categoria para o método abstrato.
   
  - Desenvolvido por: Larissa Cristina Bento Santana - Fatec (Desenvolvimento de Software Multiplataforma) 
