export interface HomeBanner {
  title: string;
  subtitle: string;
  image_url: string | null;
}

export interface GalleryItem {
  id: number;
  title: string;
  description: string | null;
  image_before_url: string;
  image_after_url: string;
}

export interface HomePromo {
  is_active: boolean;
  label: string;
  message: string;
  action_url: string | null;
}

export interface HomeCta {
  title: string;
  description: string;
}

export interface HomeDataResponse {
  banner: HomeBanner;
  promo: HomePromo;
  gallery: GalleryItem[];
  cta: HomeCta;
}
