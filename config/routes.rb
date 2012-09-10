Rigelstpierre::Application.routes.draw do

  root :to => 'home#index'

  resources :pages
  resources :works

  match ":id" => 'pages#show'
end
