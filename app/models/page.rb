class Page
  include Mongoid::Document
  include Mongoid::Slug
  field :title, :type => String
  field :content, :type => String
  field :slug, :type => String

  slug :slug
end
