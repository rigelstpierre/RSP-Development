class Portfolio
  include Mongoid::Document
  include Mongoid::Slug

  field :thumbnail, :type => String
  field :description, :type => String
  field :name, :type => String
  field :slug, :type => String

  slug :slug

  attr_accessible :thumbnail, :description, :name, :slug

  mount_uploader :image, ImageUploader
end
