import { FastlogPage } from './app.po';

describe('fastlog App', () => {
  let page: FastlogPage;

  beforeEach(() => {
    page = new FastlogPage();
  });

  it('should display message saying app works', () => {
    page.navigateTo();
    expect(page.getParagraphText()).toEqual('app works!');
  });
});
