class Work
  include Mongoid::Document
  include Mongoid::Slug

  field :thumbnail, :type => String
  field :description, :type => String
  field :name, :type => String
  field :slug, :type => String

  attr_accessible :thumbnail, :description, :name, :slug

  slug :slug
end


